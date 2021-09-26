
package masterwholeproxy;

public class GestorDePersonaje {
    
    private Personaje personaje;
    public GestorDePersonaje(Personaje personaje){
        this.personaje = personaje;
    }
    public boolean mejorarUltimate(int mejora){
        GestordeUltimate gUltimate = new GestordeUltimate(this.personaje.getUltimate());
        gUltimate.subirDeNivel(mejora);
        return true;
    }
    public boolean mejorarArmadura(int mejora){
        GestordeArmadura gArma = new GestordeArmadura(this.personaje.getArmadura());
        gArma.mejorarArmadura(mejora);
        return true;
    }
    public boolean mejorarArma(int mejorar){
        GestordeArma gArma = new GestordeArma(this.personaje.getArma());
        gArma.mejorarArma(mejorar);
        return true;
    }
    public String verStats(){
        return this.personaje.verStats();
    }
    public void generarPersonaje(Ultimate ultimate, Arma arma,Armadura armadura, Experiencia experiencia){
        this.personaje = new Personaje(armadura,arma,experiencia,ultimate);
    }
}
