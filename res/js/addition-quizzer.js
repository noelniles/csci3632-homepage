window.onload = function () {
    nextQuestion();
};
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function nextQuestion() {
    document.getElementById("answer").value = null;
    document.getElementById("result").innerHTML = null;
    var a = getRandomInt(0, 1000);
    var b = getRandomInt(0, 1000);
    document.getElementById("a").innerHTML = a.toString();
    document.getElementById("b").innerHTML = b.toString();
}

function checkAnswer() {
    var a = document.getElementById("a").innerHTML;
    var b = document.getElementById("b").innerHTML;
    var sum = parseInt(b.toString(), 10) + parseInt(a.toString(), 10);
    var ans = document.getElementById("answer").value;
    var res = document.getElementById("result").innerHTML;

    if (parseInt(ans.toString(), 10) == sum) {
        document.getElementById("result").innerHTML = '<div class="correct">Correct</div>';
    } else {
        document.getElementById("result").innerHTML = '<div class="wrong">Incorrect</div>';
    }
    document.getElementById("answer").value = null;
}
