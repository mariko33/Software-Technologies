function solve(arr) {
    let obj = {};
    for (let i = 0; i < arr.length-1; i++) {
        let currArr = arr[i].split(" ");
        let key=currArr[0];
        let value=currArr[1];

        if(!(key in obj))obj[key]=[]
        obj[key].push(value);
    }

    let index=arr[arr.length-1];

    if(!(index in obj))console.log("None")
    else console.log(obj[index].join("\r\n"));

}

solve([ '3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4' ]);