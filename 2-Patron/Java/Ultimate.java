package abstractmasterwhole;
public class Ultimate {
    private String nombre;
    private int dano;
    private int nivel;
    
    public Ultimate(String nombre, int dano, int nivel){
        this.nombre = nombre;
        this.nivel = nivel;
        this.dano = dano;
    }
    
    public String getNombre(){
        return this.nombre;
    }
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public int getNivel(){
        return this.nivel;
    }
    public void setNivel(int nivel){
        this.nivel = nivel;
    }
    public int getDano(){
        return this.dano;
    }
    public void setDano(int dano){
        this.dano = dano;
    }
    public int incNivel(int incremento){
        this.nivel += incremento; 
        return (this.nivel);
    }
    
}
