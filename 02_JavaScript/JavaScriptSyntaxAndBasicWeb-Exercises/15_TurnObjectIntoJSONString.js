function solve(arr) {
    let obj={};

    for(let i=0; i<arr.length; i++){
        let currArr=arr[i].split(" -> ");
        if(currArr[0]=='age'||currArr[0]=='grade')obj[currArr[0]]=Number(currArr[1]);
        else obj[currArr[0]]=currArr[1];
    }

    console.log(JSON.stringify(obj));
}

solve(['name -> Angel','surname -> Georgiev','age -> 20','grade -> 6.00','date -> 23/05/1995','town -> Sofia']);