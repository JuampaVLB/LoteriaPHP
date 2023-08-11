<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="container-result">
    <div class="numbers">
          <button data_number="1">
            1
          </button>
          <button data_number="2">
            2
          </button>
          <button data_number="3">
            3
          </button>
          <button data_number="4">
            4
          </button>
          <button data_number="5">
            5
          </button>
          <button data_number="6">
            6
          </button>
          <button data_number="7">
            7
          </button>
          <button data_number="8">
            8
          </button>
          <button data_number="9">
            9
          </button>
          <button data_number="10">
            10
          </button>
          <button data_number="11">
            11
          </button>
          <button data_number="12">
            12
          </button>
          <button data_number="13">
            13
          </button>
          <button data_number="14">
            14
          </button>
          <button data_number="15">
            15
          </button>
          <button data_number="16">
            16
          </button>
          <button data_number="17">
            17
          </button>
          <button data_number="18">
            18
          </button>
          <button data_number="19">
            19
          </button>
          <button data_number="20">
            20
          </button>
          <button data_number="21">
            21
          </button>
          <button data_number="22">
            22
          </button>
          <button data_number="23">
            23
          </button>
          <button data_number="24">
            24
          </button>
          <button data_number="25">
            25
          </button>
        </div>
        <div class="numbers">
          <button data_number="1">
            1
          </button>
          <button data_number="2">
            2
          </button>
          <button data_number="3">
            3
          </button>
          <button data_number="4">
            4
          </button>
          <button data_number="5">
            5
          </button>
          <button data_number="6">
            6
          </button>
          <button data_number="7">
            7
          </button>
          <button data_number="8">
            8
          </button>
          <button data_number="9">
            9
          </button>
          <button data_number="10">
            10
          </button>
          <button data_number="11">
            11
          </button>
          <button data_number="12">
            12
          </button>
          <button data_number="13">
            13
          </button>
          <button data_number="14">
            14
          </button>
          <button data_number="15">
            15
          </button>
          <button data_number="16">
            16
          </button>
          <button data_number="17">
            17
          </button>
          <button data_number="18">
            18
          </button>
          <button data_number="19">
            19
          </button>
          <button data_number="20">
            20
          </button>
          <button data_number="21">
            21
          </button>
          <button data_number="22">
            22
          </button>
          <button data_number="23">
            23
          </button>
          <button data_number="24">
            24
          </button>
          <button data_number="25">
            25
          </button>
        </div>
        <div class="numbers">
          <button data_number="1">
            1
          </button>
          <button data_number="2">
            2
          </button>
          <button data_number="3">
            3
          </button>
          <button data_number="4">
            4
          </button>
          <button data_number="5">
            5
          </button>
          <button data_number="6">
            6
          </button>
          <button data_number="7">
            7
          </button>
          <button data_number="8">
            8
          </button>
          <button data_number="9">
            9
          </button>
          <button data_number="10">
            10
          </button>
          <button data_number="11">
            11
          </button>
          <button data_number="12">
            12
          </button>
          <button data_number="13">
            13
          </button>
          <button data_number="14">
            14
          </button>
          <button data_number="15">
            15
          </button>
          <button data_number="16">
            16
          </button>
          <button data_number="17">
            17
          </button>
          <button data_number="18">
            18
          </button>
          <button data_number="19">
            19
          </button>
          <button data_number="20">
            20
          </button>
          <button data_number="21">
            21
          </button>
          <button data_number="22">
            22
          </button>
          <button data_number="23">
            23
          </button>
          <button data_number="24">
            24
          </button>
          <button data_number="25">
            25
          </button>
        </div>
        <div class="numbers">
          <button data_number="1">
            1
          </button>
          <button data_number="2">
            2
          </button>
          <button data_number="3">
            3
          </button>
          <button data_number="4">
            4
          </button>
          <button data_number="5">
            5
          </button>
          <button data_number="6">
            6
          </button>
          <button data_number="7">
            7
          </button>
          <button data_number="8">
            8
          </button>
          <button data_number="9">
            9
          </button>
          <button data_number="10">
            10
          </button>
          <button data_number="11">
            11
          </button>
          <button data_number="12">
            12
          </button>
          <button data_number="13">
            13
          </button>
          <button data_number="14">
            14
          </button>
          <button data_number="15">
            15
          </button>
          <button data_number="16">
            16
          </button>
          <button data_number="17">
            17
          </button>
          <button data_number="18">
            18
          </button>
          <button data_number="19">
            19
          </button>
          <button data_number="20">
            20
          </button>
          <button data_number="21">
            21
          </button>
          <button data_number="22">
            22
          </button>
          <button data_number="23">
            23
          </button>
          <button data_number="24">
            24
          </button>
          <button data_number="25">
            25
          </button>
        </div>
    </div>
    <?php
    if (isset($_GET['array'])) {
        $encodedArray = $_GET['array'];
        $decodedArray = json_decode(urldecode($encodedArray));

        print_r($decodedArray);
    } else {
        echo "No se recibió ningún array.";
    }
    ?>

</body>
</html>