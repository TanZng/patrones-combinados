
package masterwholeproxy;

public class GestordeUltimate {
    private Ultimate ultimate;
    
    public GestordeUltimate(Ultimate ultimate){
        this.ultimate = ultimate;
    }
    public String subirDeNivel(int incremento){
        this.ultimate.incNivel(incremento);
        return ("se incremento el ultimate "+ incremento+ " puntos");
    }
    public Ultimate generarUltimate(String nombre, int dano, int nivel){
        return new Ultimate(nombre,dano,nivel);
    }
}
