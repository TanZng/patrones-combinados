package patron6;

public abstract class Fabrica_BendicionBotas extends FabricaBotas{
    private Botas botasnormales;
    private Botas creaBotaAgregada;    

    public Fabrica_BendicionBotas(Botas botasnormales, Botas creaBotaAgregada) {
        super();
        this.botasnormales = botasnormales;
        this.creaBotaAgregada = creaBotaAgregada;
    }
    
    @Override
    public abstract void crearBotas();
    
    public abstract Botas bendecirBotas(Bota botas);
    
}
