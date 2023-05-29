import java.io.File;
import java.io.FileNotFoundException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;

public class day1_part2 {
    public static void main(String[] args) throws FileNotFoundException {
        // Criar uma lista de listas de inteiros para armazenar as calorias dos elfos
        List<List<Integer>> elfos = new ArrayList<>();

        // Abrir o arquivo
        File file = new File("input.txt");
        Scanner s = new Scanner(file);

        // Lista temporária para armazenar as calorias de cada elfo
        List<Integer> tempelf = new ArrayList<>();

        // Ler o arquivo linha por linha
        while (s.hasNextLine()) {
            String line = s.nextLine().trim();

            // Se a linha estiver vazia acabou um elfo
            // Adiciona uma lista temporária à lista principal de elfos e cria uma nova lista temporária
            if (line.isEmpty()) {
                elfos.add(tempelf);
                tempelf = new ArrayList<>();
            } else {
                // Se a linha não estiver vazia, converte para inteiro e adiciona à lista temporária
                tempelf.add(Integer.parseInt(line));
            }
        }

        // Adicionar a última lista temporária à lista principal de elfos
        elfos.add(tempelf);
        s.close();

        // Calcular a soma das calorias de cada elfo e armazenar os resultados em uma nova lista
        List<Integer> totalcal = new ArrayList<>();
        for (List<Integer> elf : elfos) {
            int total = 0;
            for (int cal : elf) {
                total = total + cal;
            }
            totalcal.add(total);
        }

        // Ordenar a lista de somas de calorias em ordem decrescente
        Collections.sort(totalcal, Collections.reverseOrder());

        // Calcular a soma das três maiores somas de calorias
        int soma = 0;
        for (int i = 0; i < Math.min(3, totalcal.size()); i++) {
            soma = soma + totalcal.get(i);
        }

        // Imprimir a soma total das três maiores somas de calorias
        System.out.println(soma);
    }
}
