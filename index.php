<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project PHP Calculator BMI</title>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>
    <div class="mx-3">
      <h1>Calculator BMI menggunakan PHP</h1>
      <p>Ini adalah calculator BMI yang dibuat mengunakan PHP!</p>
    </div>
    <form action="index.php" method="post">
    <div class="mb-3 mx-3">
      <label for="" class="form-label">Weight</label>
      <input
        type="text"
        class="form-control"
        name="weight"
        id=""
        aria-describedby="helpId"
        placeholder=""
      />
      <small id="helpId" class="form-text text-muted"
        >Masukan berat badanmu!</small
      >
    </div>
    <div class="mb-3 mx-3">
      <label for="" class="form-label">Height</label>
      <input
        type="text"
        class="form-control"
        name="height"
        id=""
        aria-describedby="helpId"
        placeholder=""
      />
      <small id="helpId" class="form-text text-muted"
        >Masukan tinggi badanmu!</small
      >
    </div>
    <button type="submit" class="btn btn-primary mx-auto d-block" value="calculate" name="calculate">
      Submit
    </button>
    </form>
    <?php
    if(isset($_POST['calculate'])) {
      $data = array(
				'weight' => $_POST['weight'],
				'height' => $_POST['height'],
			);

      $score = $data['weight']/($data['height']**2)*10000;

      if($score >= 40){
        $class = "Obese class 3";
      } elseif($score > 35 && $score <=40 ){
        $class = "Obese class 2";
      } elseif($score > 30 && $score <=35 ){
        $class = "Obese class 1";
      } elseif($score > 25 && $score <=30 ){
        $class = "Overweight";
      } elseif($score > 18.5 && $score <=25 ){
        $class = "Normal";
      } elseif($score > 17 && $score <=18.5 ){
        $class = "Mild Thinness";
      } elseif($score > 16 && $score <=17 ){
        $class = "Moperate Thinness";
      } else {
        $class = "Severe Thinness";
      }
      echo "<h4>You BMI Score is: $score</h4>";
      echo "<p>You're classified as $class</p>";
    }
    ?>
  </body>
</html>
