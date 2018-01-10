import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);
        String[] inputStr = scanner.nextLine().split(" ");
        int[] arr = new int[inputStr.length];
        for (int i = 0; i < inputStr.length; i++) {
            arr[i] = Integer.parseInt(inputStr[i]);

        }

        int currFreq=arr[0];
        int currLen=1;
        int mostFreq=arr[0];
        int len=1;

        for (int i=0; i<arr.length;i++){
            currFreq=arr[i];
            currLen=1;
            for (int j=i+1;j<arr.length; j++){
                if (arr[i]==arr[j]){
                    currLen++;
                }
            }
            if(len<currLen){
                len=currLen;
                mostFreq=currFreq;
            }
        }
        System.out.println(mostFreq);
    }
}
