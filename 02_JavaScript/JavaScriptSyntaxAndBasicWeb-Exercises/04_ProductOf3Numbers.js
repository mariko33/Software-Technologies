function solve(arr) {
    let numbersArr = arr.map(Number);
    let count = 0;
    for (let i = 0; i < numbersArr.length; i++)
        if (numbersArr[i] < 0) count++;

    if (count % 2 != 0) console.log('Negative')
    else console.log('Positive')
}