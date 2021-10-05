package patron6;

public class Bota extends Botas{
    private int velocidad;

    public Bota(int velocidad) {
        this.velocidad = velocidad;
    }

    public int getVelocidad() {
        return velocidad;
    }

    public void setVelocidad(int velocidad) {
        this.velocidad = velocidad;
    }
    
    
    @Override
    public void verBotas() {
        System.out.println("Velocidad: "+ this.velocidad);
    }
    
}
