package model;

import java.util.ArrayList;

public class SimDB {
    /*
     * Atributos STATIC para tornar quaisquer alterações aos mesmos sensível ao
     * sistema.
     */
    /*
     * FUNCIONARIO - simulador de tabela de funcionarios
     */
    private static ArrayList <Funcionario> tabFunc = new ArrayList <Funcionario>();
    
    /*
     * CLIENTE - simulador de tabela de cliente
     */
    private static ArrayList <Cliente> tabClie = new ArrayList <Cliente>();
    
    /*
     * VEICULO - simulador de tabela de veiculos
     */
    private static ArrayList <Veiculo> tabVeic = new ArrayList <Veiculo>();
    
    /*
     * Viagem - simulador de tabela de viagens
     */
    private static ArrayList <Viagem> tabViag = new ArrayList <Viagem>();
    
    /*
     * PASSAGEM - simulador de tabela de passagens
     */
    private static ArrayList <Passagem> tabPass = new ArrayList <Passagem>();
    
    /*
     * O metodo construtor é PRIVATE para evitar que haja mais de um operador
     * de simulador de banco de dados.
     */
    private SimDB() { }
    
    /*
     * Métodos STATIC para adicionar cada atributo.
     */
    
    public static void addFuncionario() {
        
    }
    
    public static void addCliente() {
        
    }
    
    public static void addVeiculo() {
        
    }
    
    public static void addViagem() {
        
    }
    
    public static void addPassagem() {
        
    }
    
    /*
     * Métodos STATIC para remover cada atributo.
     */
    
    public static void rmvFuncionario() {
        
    }
    
    public static void rmvCliente() {
        
    }
    
    public static void rmvVeiculo() {
        
    }
    
    public static void rmvViagem() {
        
    }
    
    public static void rmvPassagem() {
        
    }
    
    /*
     * Métodos STATIC para atualizar cada atributo.
     */
    public static void updtFuncionario() {
        
    }
    
    public static void updtCliente() {
        
    }
    
    public static void updtVeiculo() {
        
    }
    
    public static void updtViagem() {
        
    }
    
    public static void updtPassagem() {
        
    }
}
