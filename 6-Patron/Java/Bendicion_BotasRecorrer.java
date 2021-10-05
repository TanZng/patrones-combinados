package patron6;

public class Bendicion_BotasRecorrer extends Botas{
    private String Habilidad;

    
    public Bendicion_BotasRecorrer(String Habilidad) {
        this.Habilidad = Habilidad;
    }

    public String getHabilidad() {
        return Habilidad;
    }

    public void setHabilidad(String Habilidad) {
        this.Habilidad = Habilidad;
    }
    
    public void activarHabilidadFuria(){
        this.Habilidad = "Furia divina";
    }
    @Override
    public void verBotas() {
        System.out.println("Habilidad: "+this.Habilidad + "Velocidad: " );
    }
    
}
