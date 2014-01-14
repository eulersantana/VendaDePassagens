package model;

import java.util.ArrayList;

public class Viagem {
    private ArrayList <Veiculo> veiculos;
    private ArrayList <String> cidades;
    private String id;
    
    public Viagem(ArrayList<Veiculo> veiculos, ArrayList<String> cidades,
                  String id) {
        this.veiculos = veiculos;
        this.cidades  = cidades;
        this.id       = id;
    }
    
    public Viagem(String id) {
        this.veiculos = new ArrayList <Veiculo>();
        this.cidades  = new ArrayList <String>();
        this.id       = id;
    }
    
    /*
     * Metodo PUBLIC que adiciona uma nova cidade a viagem
     */
    public void addCidade(String cidade) {
        this.cidades.add(cidade);
    }
    
    /*
     * Metodos Gets
     */
    public ArrayList <Veiculo> getVeiculos() {
        return veiculos;
    }

    public ArrayList <String> getCidades() {
        return cidades;
    }

    public String getId() {
        return id;
    }
}
