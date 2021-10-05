package patron6;

public class DecoratorB_BotasJungla extends Fabrica_BendicionBotas{
    private Bendicion_BotasJungla bendecirbotasjungla;

    public DecoratorB_BotasJungla(Bendicion_BotasJungla bendecirbotasjungla, Botas botasnormales, Botas creaBotaAgregada) {
        super(botasnormales, creaBotaAgregada);
        this.bendecirbotasjungla = bendecirbotasjungla;
    }

    public DecoratorB_BotasJungla() {
        super(null, null);
        this.bendecirbotasjungla = null;
    }
   
    @Override
    public void crearBotas() {
        this.bendecirbotasjungla = new Bendicion_BotasJungla("Bendicion del dios de la jungla") ;
        
    }

    @Override
    public Botas bendecirBotas(Bota botas) {
        return this.bendecirbotasjungla;
    }
        
}
