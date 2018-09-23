<html>
<?php
global $students;
$id = 0;
$students = [
    [
        "id" => $id++,
        "fname" => "pet",
        "lname" => "gos",
        "mail" => "sss@sss.po",
        "score" => 5.99
    ],
    [
        "id" => $id++,
        "fname" => "tony",
        "lname" => "petk",
        "mail" => "kkkk@fddfd.ru",
        "score" => 7.99
    ]
];
?>
<table border="1">
    <thead>
    <tr>
        <td colspan="5">Form</td>
    </tr>
    </thead>
    <tbody>
    <form method="GET">
        <tr>
            <td>First Name:</td>
            <td>Second Name:</td>
            <td>Email:</td>
            <td colspan="2">Exam Score:</td>
        </tr>
            <?php
            loadStudents($students);
            ?>
        <tr>
            <td><input type="text" name="fn"/></td>
            <td><input type="text" name="ln"/></td>
            <td><input type="text" name="em"/></td>
            <td><input type="text" name="sc"/></td>
            <td>
                <input type="submit" name="add" value="+"/>
            </td>
        </tr>
    </tbody>
    </form>
</table>

<?php
function loadStudents($students)
{
    foreach ($students as $key => $value) {
        $no = $value['id'];
        $fname = $value['fname'];
        $lname = $value['lname'];
        $mail = $value['mail'];
        $score = $value['score'];

        $html = "<tr><td>$fname</td>
            <td>$lname</td>
            <td>$mail</td>
            <td>$score</td>
            <td><input type=\"submit\" name=\"remove\" value=\"-\" data-id=\"$no\"/></td></tr>";
        echo $html;
    }
}

if (isset($_GET["add"]) && !(empty($_GET['fn']) && empty($_GET['ln']) && empty($_GET['em']) && empty($_GET['sc']))) {
    $students[] =[
        "fname" => $_GET['fn'],
        "lname" => $_GET['ln'],
        "mail" => $_GET['em'],
        "score" => $_GET['sc']
    ];

    loadStudents($students);
}
?>
</html>