
package AbstractFactoryDecorator;

public class Cliente {

    
    public static void main(String[] args) {
       FabricaBotas factory = new Fabrica_BotasNormales();
       Botas bota = factory.crearBotas();
       bota.getVelocidad();
        
    }
}
    