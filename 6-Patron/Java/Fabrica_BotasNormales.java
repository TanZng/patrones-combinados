package patron6;

public class Fabrica_BotasNormales extends FabricaBotas{
    private Bota botasNormales;

    public Fabrica_BotasNormales(Bota botasNormales) {
        this.botasNormales = botasNormales;
    }

    public Bota getBotasNormales() {
        return botasNormales;
    }

    public void setBotasNormales(Bota botasNormales) {
        this.botasNormales = botasNormales;
    }

    @Override
    public void crearBotas() {
        Bota botaN = new Bota(100);
        this.botasNormales = botaN;
    }
    
    
}
