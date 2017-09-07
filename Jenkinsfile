pipeline
{ agent
  {
   label 'any'
   }
   
   stages{
   stage('validate')
   {
     steps{
	 
	 
     withMaven(maven:'maven3.5')
	 {
	  sh mvn compile
	  }
	  
	  stage('test')
	  {
	   steps{
	   
	   withMaven(maven : 'maven3.5')
	    sh mvn test
		}
		
	 }
    stage('deploy')
    {

      steps{
     withMaven(maven : 'maven3.5')
     sh mvn deploy
     }
   }

  }
}  
