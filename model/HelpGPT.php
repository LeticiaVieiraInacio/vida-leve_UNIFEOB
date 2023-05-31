<?php
namespace Model;

use Classes\Database;
use Model\Response;
use Model\Exception;

class HelpGPT extends Database
{
    public function ask($context)
    {
        $prompt = $this->makePromp($context);
        $OPENAI_API_KEY = "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";

        try {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $OPENAI_API_KEY
            ));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, '{
            "model": "text-davinci-003",
            "prompt": "' . $prompt . '",
            "temperature": 0.9,
            "max_tokens": 250,
            "top_p": 1,
            "frequency_penalty": 0.0,
            "presence_penalty": 0.6,
            "stop": [" Human:", " AI:"]
            }');

            $response = curl_exec($ch);

            if ($response === false) {
                echo 'Error: ' . curl_error($ch);
            }

            curl_close($ch);

            $response = $this->transformResponse($context, $response);
            
            return Response::success($response);
        } catch (Exception $ex) {
            return Response::error();
        }
    }

    private function makePromp($context) {
        $prompt = '';
        
        foreach ($context as $message) {
            if ($message['role'] == 'user') {
                $prompt .= "\\nHuman:{$message['content']}\\nAI:";
            } else {
                $prompt .= "{$message['content']}";
            }
        }

        return $prompt;
    }

    private function transformResponse($context, $response) {
        $response = json_decode($response, true);
        $response_text = str_replace('\n\r', '', $response['choices'][0]['text']);

        $newContext = [...$context, [
            'role' => 'chat',
            'content' => $response_text
        ]];

        return $newContext;
    }
}