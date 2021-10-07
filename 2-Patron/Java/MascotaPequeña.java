package abstractmasterwhole;
public class MascotaPequeña extends Criatura{
    private boolean sigueme;
    public MascotaPequeña(String nombre, int defensa, int ataque, int nivel) {
        super(nombre, defensa, ataque, nivel);
        this.sigueme = true;
    }
    public boolean getSigueme(){
        return this.sigueme;
    }
    public void setSigueme(boolean sigueme){
        this.sigueme = sigueme;
    }
    public boolean pasear(){
        this.sigueme = true;
        return sigueme;
    }
    public boolean sentar(){
        this.sigueme = false;
        return sigueme;
    }

    @Override
    public int decSalud(int dec) {
        
        return this.salud = decremento / this.defensa;
    }

    @Override
    public int incNivel() {
        return this.nivel +=5;
    }

    @Override
    public String verStats() {
        return super.verStats() + "Siguieme: "+this.sigueme; //To change body of generated methods, choose Tools | Templates.
    }

    
    
    
    
}
