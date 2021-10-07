package abstractmasterwhole;
public class FabricadeMascotas implements FabricadeCriaturas {

    @Override
    public Criatura crearGrande(String nombre) {
        return new MascotaGrande(nombre, 100, 1000, 1);
    }

    @Override
    public Criatura crearPequeña(String nombre){ 
            return new MascotaPequeña(nombre, 10, 100, 1);
    }

    
    
}
