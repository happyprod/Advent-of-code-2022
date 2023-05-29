import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class day1_part1 {
    public static void main(String[] args) throws FileNotFoundException {
        int maxCalories = 0;
        int totalCalories = 0;

        File file = new File("input.txt");
        Scanner scanner = new Scanner(file);

        while (scanner.hasNextLine()) {
            String line = scanner.nextLine().trim();

            if (line.isEmpty()) {
                if (totalCalories > maxCalories) {
                    maxCalories = totalCalories;
                }
                totalCalories = 0;
            } else {
                int calories = Integer.parseInt(line);
                totalCalories += calories;
            }
        }

        if (totalCalories > maxCalories) {
            maxCalories = totalCalories;
        }

        scanner.close();

        System.out.println(maxCalories);
    }
}