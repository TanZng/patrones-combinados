package abstractmasterwhole;
public class Montura {
    private String nombre;
    private float velocidad;
    private int nivel;
    
    public Montura(String nombre, float velocidad, int nivel){
        this.nombre = nombre;
        this.velocidad = velocidad;
        this.nivel = nivel;
    }
    public String getNombre(){
        return this.nombre;
    }
    public void setNombre(String nombre){
        this.nombre = nombre;   
    }
    public float getVelocidad(){
        return this.velocidad;
    }
    public void setVelocidad(float velocidad){
        this.velocidad = velocidad;
    }
    public int getNivel(){
        return this.nivel;
    }
    public void setNivel(int nivel){
        this.nivel = nivel;
    }
    public int incNivel(){
        this.nivel += 1;
        return this.nivel;
    }
}
