package AbstractFactoryDecorator;

public class FabricaDecorator_BendicionBotas implements FabricaBotas {
    @Override
    public Botas crearBotas() {
        return new Bota();
    }
}
