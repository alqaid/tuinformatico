SELECT empresas.eNombre AS Empresa,informaticos.iNombre as Informatico ,contratos.cPuntuacion as Puntuacion, contratos.cFechaInicio,contratos.cFechaFin
FROM `contratos`,`empresas`,`informaticos` WHERE 
contratos.ceClaveEmpresas=empresas.eClave and contratos.ciClaveInformaticos=informaticos.iClave
ORDER BY empresas.eNombre,informaticos.iNombre,contratos.cPuntuacion