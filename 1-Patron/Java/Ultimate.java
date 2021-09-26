package masterwholeproxy;
public class Ultimate {
    
    private String nombre;
    private int dano;
    private int nivel;
    
    public Ultimate(String nombre,int dano, int nivel){
        this.nombre = nombre;
        this.dano = dano;
        this.dano = nivel;
    }
    
    public String getNombre(){
        return this.nombre;
    }
    public int getDano(){
        return this.dano;
    }
    public int getNivel(){
        return this.nivel;
    }
    
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public void setDano(int dano){
        this.dano = dano;
    }
    public void setNivel(int nivel){
        this.nivel = nivel;
    }
    public void incNivel(int incremento){
        this.nivel += incremento;
    }
}
