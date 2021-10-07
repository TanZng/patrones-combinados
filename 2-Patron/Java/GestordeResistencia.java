package abstractmasterwhole;
public class GestordeResistencia {
    private Resistencia resistencia;
    public GestordeResistencia(Resistencia resistencia){
        this.resistencia = resistencia;
    }
    public Resistencia generarResistencia(){
        return Resistencia(1,10);
    }
}
