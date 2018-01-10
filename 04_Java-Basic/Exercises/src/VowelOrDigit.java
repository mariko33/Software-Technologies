import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args){
        Scanner scanner=new Scanner(System.in);
        String input=scanner.nextLine();

        String pattern="[0-9]+";
        if (input.matches(pattern)){
            System.out.println("digit");
        }
        else if(input.equals("a")||input.equals("e")||input.equals("i")||input.equals("u")||input.equals("o")){
            System.out.println("vowel");
        }
        else {
            System.out.println("other");
        }
    }
}
