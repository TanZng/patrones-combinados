package patron6;

public class DecoratorB_BotasRecorrer extends Fabrica_BendicionBotas{
    private Botas bendecirbotasrecorrer;

    public DecoratorB_BotasRecorrer(Botas bendecirbotasrecorrer, Botas botasnormales, Botas creaBotaAgregada) {
        super(botasnormales, creaBotaAgregada);
        this.bendecirbotasrecorrer = bendecirbotasrecorrer;
    }

    public DecoratorB_BotasRecorrer() {
        super(null, null);
        this.bendecirbotasrecorrer = null;
    }

    
    @Override
    public void crearBotas() {
      Bendicion_BotasRecorrer nuevaB = new Bendicion_BotasRecorrer("Bendicion recorrer");
      this.bendecirbotasrecorrer = nuevaB;
    }

    @Override
    public Botas bendecirBotas(Bota bota) {
        System.out.println("Se han bendecido tus botas de "+ bota.getVelocidad());
        int velocidadnueva = bota.getVelocidad() + 50;
        bota.setVelocidad(velocidadnueva);
        System.out.println("a "+ bota.getVelocidad() + "puntos de velociodad");
        return bota;
    }
    
    
}
