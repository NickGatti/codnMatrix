<!doctype html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="alternate" href="http://www.codn.io/martix/" hreflang="en-us" />
    <meta title="Print a given matrix in spiral form">
    <meta name="description" content="Common interview question, print a given matrix in spiral form">
    <meta author="Nick Gatti">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Codn.io - Matrix Puzzle</title>
</head>

<body>
    <div id='wrapper'>
    <a class="breadcrumb" href="http://www.codn.io/">[Codn Home]</a><div class="breadcrumb">[Matrix]</div>
        <h1>Matrix Interview Question by: Nick Gatti</h1>
        <h4>Print a given matrix (limit 3 - 10 in size) in sprial form:</h4>
        <?php include 'matrix.php'; ?>
        <div id="formWrapper">
            <div id="centerThis">
                <p>Input a number from 3 - 10</p>
                <p>Square matrix until someone challenges me to write a new input field for it</p>
                <p>Constrained from 3 to 10 in size to prevent things from blowing up</p>
            </div>
            <form method="POST">
                <div id="inputWrapper">
                    <input type="text" name="number" placeholder="matrix size" />
                    <input type="submit" name="create" value="Create" onclick="runFn();" />
                </div>
            </form>
        </div>
        <blockquote>
            <p>This code project is a visual answer to illustrate how I was able to solve a matrix problem where you are asked to print the numbers within a matrix in a spiral form.</p>
            <p>An example input would be:
                <br> [
                <br> [1, 2, 3],
                <br> [4, 5, 6],
                <br> [7, 8, 9],
                <br> ];
                <br> The expected output for this would be:
                <br> [1, 2, 3, 6, 9, 8, 7, 4, 5];
                <br>
            </p>
        </blockquote>
        <ul>
            <li>Output in 3 forms; the answer, the non-mutated original matrix and html pushed back with PHP and solved by Javascript</li>
            <li>Exercise taken from my teachers at school (commonly asked interview question)</li>
            <li>Form submission sends matrix length to PHP backend which builds the matrix in html form and sends it back where javascript takes care of the rest</li>
            <li>Github link to example code:
                <br> <a href="https://github.com/NickGatti/codnMatrix" target="_blank">GITHUB PROJECT</a></li>
        </ul>
    </div>
    <div id="outputWrap">
        <div id="original">Original: No input!</div>
        <div id="answer">Answer: No input!</div>
    </div>
    </div>
    <script src="index.js" async></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-96831803-1', 'auto');
    ga('send', 'pageview');
    </script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" async>
</body>

</html>