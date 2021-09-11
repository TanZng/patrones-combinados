import FabricaDeCriaturas
import MascotaGrande
import MascotaPequeña


class FabricaDeMascotas(FabricaDeCriaturas):
    def crearGrande(self, nombre):
        return MascotaGrande(nombre, 100, 1000, 1)

    def crearPequeña(self, nombre):
        return MascotaPequeña(nombre, 10, 100, 1)
