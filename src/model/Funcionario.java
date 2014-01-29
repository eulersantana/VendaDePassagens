package model;

public class Funcionario {
    private String nome;
    private String senha;
    private String id;
    
    public Funcionario(String nome, String senha, String id) {
        this.nome  = nome;
        this.senha = senha;
        this.id    = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }
}
