package patron6;

public class Bendicion_BotasJungla extends Botas {
    private String Habilidad;

    public Bendicion_BotasJungla(String Habilidad) {
        this.Habilidad = Habilidad;
    }

    public String getHabilidad() {
        return Habilidad;
    }

    public void setHabilidad(String Habilidad) {
        this.Habilidad = Habilidad;
    }
    
    public void activarHabilidadRetribucion(){
        this.Habilidad = "Retribucion del angel caido";
    }
    
    @Override
    public void verBotas() {
        System.out.println("Habilidad: "+this.Habilidad);
    }
    
}
