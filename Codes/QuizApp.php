<!DOCTYPE html>
<html>

<head>
    <title>PHP Quiz</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .question {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>PHP Quiz</h1>

        <?php
        $questions = array(
            array("question" => "Which country has the highest life expectancy?", "options" => array("Japan", "Switzerland", "Hong Kong", "Singapore"), "answer" => "Hong Kong"),
            array("question" => "What is the most common surname in the United States?", "options" => array("Johnson", "Williams", "Smith", "Brown"), "answer" => "Smith"),
            array("question" => "Who was the Ancient Greek God of the Sun?", "options" => array("Zeus", "Poseidon", "Apollo", "Hades"), "answer" => "Apollo"),
            array("question" => "How many minutes are in a full week?", "options" => array("10,080", "14,400", "5,040", "20,160"), "answer" => "10,080"),
            array("question" => "Aureolin is a shade of what color?", "options" => array("Red", "Blue", "Yellow", "Green"), "answer" => "Yellow"),
            array("question" => "How many faces does a Dodecahedron have?", "options" => array("8", "10", "12", "20"), "answer" => "12"),
            array("question" => "What is the 4th letter of the Greek alphabet?", "options" => array("Alpha", "Beta", "Gamma", "Delta"), "answer" => "Delta"),
            array("question" => "What company was initially known as 'Blue Ribbon Sports'?", "options" => array("Adidas", "Puma", "Nike", "Reebok"), "answer" => "Nike"),
            array("question" => "What art form is described as 'decorative handwriting or handwritten lettering'?", "options" => array("Painting", "Sculpting", "Calligraphy", "Photography"), "answer" => "Calligraphy"),
            array("question" => "What software company is headquartered in Redmond, Washington?", "options" => array("Apple", "Google", "Microsoft", "Amazon"), "answer" => "Microsoft")
        );

        $score = 0;

        foreach ($questions as $key => $question) {
            echo "<div class='question'>";
            echo "<p>" . $question["question"] . "</p>";
            foreach ($question["options"] as $option) {
                echo "<label><input type='radio' name='q" . $key . "' value='" . $option . "'> " . $option . "</label>";
            }
            echo "</div>";
        }
        ?>

        <button onclick="calculateScore()">Submit Quiz</button>

        <div id="result"></div>
    </div>

    <script>
        function calculateScore() {
            let score = 0;
            <?php
            foreach ($questions as $key => $question) {
                echo "let q" . $key . "Answer = document.querySelector('input[name=\"q" . $key . "\"]:checked');\n";
                echo "if (q" . $key . "Answer && q" . $key . "Answer.value === \"" . $question['answer'] . "\") { score++; }\n";
            }
            ?>
            document.getElementById("result").innerHTML = "Your Score: " + score + " / <?php echo count($questions); ?>";
        }
    </script>

</body>

</html>