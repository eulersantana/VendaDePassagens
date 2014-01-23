package model;

public class Veiculo {
    private String tipo;
    private String id;
    private String horario;
    private boolean[] poltronas;
    
    public Veiculo(String tipo, String id, String horario) {
        this.tipo      = tipo;
        this.id        = id;
        this.horario   = horario;
        this.poltronas = new boolean[48];
        desocuparPoltronas();
    }
    
    /*
     * Metodo PRIVATE zerar para inicializar que o onibus possui todas as
     * poltronas disponiveis;
     */
    private void desocuparPoltronas() {
        for(int i = 0; i < 48; i++)
            desocupar(i);
    }
    
    /*
     * Método PUBLIC ocupar - muda o tipo da poltrona de desocupada (FALSE) para
     * ocupada (TRUE);
     * Caso a poltrona seja ocupada e retornado TRUE ou FALSE caso contrario.
     */
    public boolean ocupar(int i) {
        if (poltronas[i] == false) {
            poltronas[i] = true;
            
            return true;
        }
        
        return false;
    }
    
    /*
     * Método PUBLIC desocupar - muda o tipo da poltrona para desocupada
     * (FALSE).
     */
    public void desocupar(int i) {
        poltronas[i] = false;
    }
    
    /*
     * Muda o horario do veiculo
     */
    public void mudarHorario(String novoHorario) {
        horario = novoHorario;
    }
    
    /*
     * Metodos Gets e Sets
     */
    public String getTipo() {
        return tipo;
    }
    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public boolean[] getPoltronas() {
        return poltronas;
    }

    public void setPoltronas(boolean[] poltronas) {
        this.poltronas = poltronas;
    }

    public String getHorario() {
        return horario;
    }

    public void setHorario(String horario) {
        this.horario = horario;
    }
}
