package model;

public class Cliente {
    private String nome;
    private String email;
    private String cpf;
    private String senha;
    private String endereco;
    private String telefone;
    
    public Cliente(String nome, String email, String cpf, String senha,
                   String endereco, String telefone) {
        this.nome     = nome;
        this.email    = email;
        this.senha    = senha;
        this.cpf      = cpf;
        this.endereco = endereco;
        this.telefone = telefone;
    }
    
    /*
     * Métodos Gets e Sets
     */
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }
}
