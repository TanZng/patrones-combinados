package CreadoresDeMapa;

import buildercomposite.CreadorDeMapa;
import buildercomposite.IMapa;
import buildercomposite.Mapa;
import buildercomposite.Mazmorra;
import buildercomposite.Tesoro;
import buildercomposite.Textura;

public class CreadorMapaNieve extends CreadorDeMapa{

    public CreadorMapaNieve(IMapa mapa) {
        super(mapa);
    }


    @Override
    public Mapa CrearMapa(){ 
        Mazmorra mazmorra = new Mazmorra();
        Textura textura = new Textura("nieve.png",140,300);
        Tesoro tesoro = new Tesoro(100,2000);
        Mapa map = new Mapa(mazmorra,tesoro,textura);
        return map;
    }

    @Override
    public IMapa getMapa() {
        return super.getMapa(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void setMapa(IMapa mapa) {
        super.setMapa(mapa); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    
}
