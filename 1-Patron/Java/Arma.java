
package masterwholeproxy;

public class Arma {
    private String nombre;
    private float dano_inflijido; 
    private String hechizo;
    private float duracion;
    private int nivel;
    
    public Arma(String nombre, float dano, float duracion,int nivel ){
        this.dano_inflijido = dano;
        this.duracion = duracion;
        this.hechizo = null;
        this.nombre = nombre;
        this.nivel = nivel;
    }
    public String getNombre(){
        return this.nombre;
    }
    public float getDano_inflijido(){
        return this.dano_inflijido;
    }
    public String hechizo(){
        return this.hechizo;
    }
    public float getDuracion(){
        return this.duracion;
    } 
    public int getNivel(){
        return this.nivel;
    }
    
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public void setDano_inflijido(float dano ){
        this.dano_inflijido = dano;
    }
    public void setHechizo(String hechizo){
        this.hechizo = hechizo;
    }
    public void setDuracion(float duracion){
        this.duracion = duracion;
    }
    public void setNivel( int nivel){
        this.nivel = nivel;
    }
    public void AumentarDano(float aumento){
        this.dano_inflijido += aumento;
    }
    public void IncNivel(){
        this.nivel +=1;
    }
                
}
