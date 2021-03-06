<?php $this->_title = "Liste des enseignants"; ?>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Surnom</th>
        <th>Options</th>
        <!--Current user condition-->
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($teachers as $teacher): ?>
        <tr>
            <td><?= $teacher['teaFirstname'] . ' ' . $teacher['teaName'] ?></td>
            <td><?= $teacher['teaNickname'] ?></td>
            <!-- If is admin -->
            <td class="containerOptions">
                <a href="index.php?controller=teacher&action=edit&idTeacher=<?= $teacher['idTeacher'] ?>">
                    <img height="20em" src="./public/resources/img/edit.png" alt="edit">
                </a>
                <a href="javascript:confirmDelete('index.php?controller=teacher&action=delete&idTeacher=<?= $teacher['idTeacher'] ?>')">
                    <img height="20em" src="./public/resources/img/delete.png" alt="delete">
                </a>
                <a href="index.php?controller=teacher&action=detail&idTeacher=<?= $teacher['idTeacher'] ?>">
                    <img height="20em" src="./public/resources/img/detail.png" alt="detail">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="./public/resources/js/script.js"></script>

