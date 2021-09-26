
package AbstractFactoryDecorator;


public class Bota implements Botas{
    private  int velocidad;
  
    public Bota(){
        this.velocidad = 10;
    }
            
    @Override
    public void getVelocidad() {
        
        System.out.println("Tienes "+ this.velocidad + " puntos de velocidad " );
    }
   
  

    
}
