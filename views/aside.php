<?php

use Model\Paciente;

if (isset($_GET['id'])) {
    $paciente = new Paciente();
    $pacienteData = $paciente->fetch($_GET['id']);
?>


    <aside>
        <div class="user">
            <?php if (!$pacienteData['foto']) : ?>
                <img style="width: 295px; height: 295px; border-radius: 50%; box-shadow: 0px 2px 0.5rem rgb(0 0 0 / 30%);" src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
            <?php else : ?>
                <img style="width: 295px; height: 295px; border-radius: 50%; box-shadow: 0px 2px 0.5rem rgb(0 0 0 / 30%);" src="<?= $pacienteData['foto'] ?>">
            <?php endif; ?>
            <div class="info">
                <i class="fa-solid fa-circle-info"></i>
                <span>Informações</span>
            </div>
            <p><?= $pacienteData['nome']; ?></p>
        </div>

        <div class="links">
            <ul>
                <li>
                    <a class="<?php echo $_GET['action'] === "exames" ? 'active' : '' ?>" href="?page=paciente&action=exames&id=<?= $_GET['id']; ?>">Exames</a>
                </li>
                <li class="multiple">
                    <a class="<?php echo $_GET['action'] === "anamneses" ? 'active' : '' ?>" href="?page=paciente&action=anamneses&id=<?= $_GET['id']; ?>">Anamneses</a>
                    <div class="submenu">
                        <ul>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Anamnese Geral</a>
                            </li>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Enfermagem</a>
                            </li>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Farmácia</a>
                            </li>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Educação Física</a>
                            </li>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Nutrição</a>
                            </li>
                            <li>
                                <a href="?page=paciente&action=anamnese-geral&id=<?= $_GET['id'] ?>">Psicologia</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="<?php echo $_GET['action'] === "evolucao" ? 'active' : '' ?>" href="?page=paciente&action=evolucao&id=<?= $_GET['id']; ?>">Evolução</a>
                </li>
                <li>
                    <a class="<?php echo $_GET['action'] === "consultas" ? 'active' : '' ?>" href="#">Consultas</a>
                </li>
            </ul>
        </div>
    </aside>

<?php } ?>