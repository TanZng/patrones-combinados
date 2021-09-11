import FabricaDeCriaturas
import MonstruoColosal
import MonstruoComun
import GestorDeHabilidades
import GestorDeUltimate
import GestorDeResistencia


class FabricaDeMonstruos(FabricaDeCriaturas):
    def crearGrande(self, nombre):
        resistencia = GestorDeResistencia.generarResistencia()
        habilidad = GestorDeHabilidades().generarHabilidad()
        ultimate = GestorDeUltimate().generarUltimate()
        multiplicador_daño = 0.3
        return MonstruoColosal(nombre, 100, 1000, 1, habilidad, ultimate, resistencia, multiplicador_daño)

    def crearPequeña(self, nombre):
        resistencia = GestorDeResistencia.generarResistencia()
        habilidad = GestorDeHabilidades().generarHabilidad()
        ultimate = GestorDeUltimate().generarUltimate()
        return MonstruoComun(nombre, 100, 1000, 1, habilidad, ultimate, resistencia)
