<?php
include "QE.php"
?>
    <form method="post">
        a : <input type="number" name="a">
        b : <input type="number" name="b">
        c : <input type="number" name="c">
        <button>Tính</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $qe = new QE($a, $b, $c);
    echo $qe->getDiscriminant();
    echo "<br>";
    echo $qe->getRoot1();
    echo "<br>";
    echo $qe->getRoot2();
}
?>