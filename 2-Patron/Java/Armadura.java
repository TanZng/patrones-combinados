package abstractmasterwhole;
public class Armadura {
    private String nombre;
    private int nivel; 
    private float dano_recibido;
    private float duracion; 
    
    public Armadura(String nombre, int nivel, float dano_recibido, float duracion){
        this.dano_recibido = dano_recibido;
        this.duracion = duracion;
        this.nivel = nivel;
        this.nombre = nombre;
    }
    public String nombre(){
        return this.nombre;
    }
    public int getNivel(){
        return this.nivel;
    }
    public float getDano_recibido(){
        return this.dano_recibido;
    }
    public float getDuracion(){
        return this.duracion;
    }
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public void setNivel(int nivel){
        this.nivel = nivel;
    }
    public void setDano_recibido(float dano_recibido){
        this.dano_recibido += dano_recibido;
    }
    public void setDuracion(float duracion){
        this.duracion = +duracion;  
    }
    public void incNivel(){
        this.nivel += 1;
    }
    public void incDuracion(int duracion){
        this.duracion = duracion;
    }
}
