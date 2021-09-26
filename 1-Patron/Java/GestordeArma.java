
package masterwholeproxy;
public class GestordeArma {
    
    private Arma arma;
    
    public GestordeArma(Arma arma){
        this.arma = arma;
    }
    
    public boolean repararArma(float reparacion){
        this.arma.setDuracion(reparacion);
        return true;
    }
    public boolean mejorarArma(float mejora){
        this.arma.AumentarDano(mejora);
        return true;
    }
    public boolean cambiarHechizo(String hechizo){
        this.arma.setHechizo(hechizo);
        return true;
    }
    public Arma generarArma(String nombre,float dano,float duracion,int nivel){
        return new Arma(nombre,dano,duracion,nivel);
    }
}
