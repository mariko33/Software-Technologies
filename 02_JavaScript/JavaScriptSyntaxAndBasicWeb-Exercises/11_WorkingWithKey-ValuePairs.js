function solve(arr) {
    let obj = {};
    for (let i = 0; i < arr.length-1; i++) {
        let currArr = arr[i].split(" ");
        if (obj[currArr[0]] in obj)
            obj[currArr[0]] = currArr[1];
        else obj[currArr[0]] = currArr[1];
    }

    let index=arr[arr.length-1];

    if (!(index in obj))console.log("None");
    else console.log(obj[index]);



}

solve(['key value', 'key eulav', 'test tset', 'key']);

//solve(['3 bla', '3 alb', '2']);