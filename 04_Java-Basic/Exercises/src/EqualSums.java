import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Scanner;

public class EqualSums {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);
        int[] numbers = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();
        boolean isFound = false;
        for (int i = 0; i < numbers.length ; i++) {
            int leftSum = FindLeftSum(i, numbers);
            int rightSum = FindRightSum(i, numbers);
            if(leftSum==rightSum) {
                isFound = true;
                System.out.println(i);
                break;
            }
        }
        if(!isFound) System.out.println("no");
    }

    private static int FindRightSum(int i, int[] numbers) {
        int rightSum = 0;
        for (int j = i+1; j < numbers.length ; j++) {
            rightSum+= numbers[j];
        }
        return rightSum;
    }

    private static int FindLeftSum(int i, int[] numbers) {
        int leftSum = 0;
        for (int j = 0; j < i; j++) {
            leftSum += numbers[j];
        }
        return leftSum;

    }
}
