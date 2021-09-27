
package AbstractFactoryDecorator;

public class Fabrica_BotasNormales implements FabricaBotas {

    @Override
    public Botas crearBotas(){
        return new Bota();
    }

    
}   