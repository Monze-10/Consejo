"use strict";

function armaSQL() {
  var txtBuscaFolio = $("#txtBuscaFolio");
  var txtBuscaNombre = $("#txtBuscaNombre");
  var txtBuscaTelefono = $("#txtBuscaTelefono");
  var cboCatalogo = $("#cboCatalogo option:selected").text();

  var strSqlText = "";
  strSqlText =
    "Select R_IdReg, R_Folio, R_Fecha, R_Nombre + ' ' + R_Paterno + ' ' + R_Materno As R_NombreCompleto, R_Nombre, R_Paterno, R_Materno, R_Sexo, R_Edad, R_Origen, R_Estado, R_Delegacion, R_Pais, R_TelefonoDen, R_FechaHechos, R_HoraHechos, R_Hechos, R_Catalogo, R_SubCatalogo, R_Consumacion, R_Inmueble, R_Autos, R_Personas, R_Llamada, R_SubSubCatalogo, R_Usuario, R_Status, R_Seguimiento, R_OrigenLlamada, R_Celular, R_IdenLlamadas, R_DondeseRecibio, R_Relevante, R_Informativa, R_ValidadorPDI FROM ReporteCiudadano WHERE ";

  //Folio
  if (!!txtBuscaFolio.val()) {
    strSqlText = strSqlText + " R_Folio like '%" + txtBuscaFolio.val() + "%'";
  }

  //Nombre
  if (!!txtBuscaNombre.val()) {
    if (!!txtBuscaFolio.val()) {
      strSqlText = strSqlText + " And ";
    }
    strSqlText =
      strSqlText +
      " R_Nombre + ' ' + R_Paterno + ' ' + R_Materno like '%" +
      txtBuscaNombre.val() +
      "%' ";
  }

  // Telefono
  if (!!txtBuscaTelefono.val()) {
    if (!!txtBuscaFolio.val() || !!txtBuscaNombre.val()) {
      strSqlText = strSqlText + " And ";
    }
    strSqlText =
      strSqlText + " R_TelefonoDen like '%" + txtBuscaTelefono.val() + "%' ";
  }

  // Catalogo
  if (cboCatalogo !== "--Seleccione un elemento--") {
    if (
      !!txtBuscaFolio.val() ||
      !!txtBuscaNombre.val() ||
      !!txtBuscaTelefono.val()
    ) {
      strSqlText = strSqlText + " And ";
    }
    strSqlText = strSqlText + " R_Catalogo like '%" + cboCatalogo + "%' ";
  }

  strSqlText = strSqlText + " And R_Status = '1' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a la Condesa' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a la Zona Rosa' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a Garibaldi' ";
  strSqlText =
    strSqlText + " And R_Programa <> 'Protejamos a Nuestro Aeropuerto' ";
  strSqlText = strSqlText + " And R_Programa <> 'Terminales Seguras' ";
  strSqlText = strSqlText + " And R_Programa <> 'Paot' ";
  strSqlText =
    strSqlText +
    " And R_Programa <> 'Reordenamiento de trabajadores no asalariados' ";
  strSqlText = strSqlText + " And R_Programa <> '10 Comportamientos' ";
  strSqlText = strSqlText + " And R_Programa <> 'Reventa de Boletos' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'SIDEC' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'Ciro Di Constanzo' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'No más extorsiones' ";
  strSqlText = strSqlText + " And R_Invea <> 'S' ";

  // Folio
  if (!!txtBuscaFolio.val()) {
    if (!!strSqlText) {
      strSqlText = strSqlText + " Or ";
    }
    strSqlText = strSqlText + " R_Folio like '%" + txtBuscaFolio.val() + "%'";
  }

  // Nombre
  if (!!txtBuscaNombre.val()) {
    if (!!txtBuscaFolio.val()) {
      strSqlText = strSqlText + " And ";
    } else {
      strSqlText = strSqlText + " Or ";
    }
    strSqlText =
      strSqlText +
      " R_Nombre + ' ' + R_Paterno + ' ' + R_Materno like '%" +
      txtBuscaNombre.val() +
      "%' ";
  }

  // Telefono
  if (!!txtBuscaTelefono.val()) {
    if (!!txtBuscaFolio.val() || !!txtBuscaNombre.val()) {
      strSqlText = strSqlText + " And ";
    } else {
      strSqlText = strSqlText + " Or ";
    }
    strSqlText =
      strSqlText + " R_TelefonoDen like '%" + txtBuscaTelefono.val() + "%' ";
  }

  // Catalogo
  if (cboCatalogo !== "--Seleccione un elemento--") {
    if (
      !!txtBuscaFolio.val() ||
      !!txtBuscaNombre.val() ||
      !!txtBuscaTelefono.val()
    ) {
      strSqlText = strSqlText + " And ";
    } else {
      strSqlText = strSqlText + " Or ";
    }
    strSqlText = strSqlText + " R_Catalogo like '%" + cboCatalogo + "%' ";
  }

  strSqlText = strSqlText + " And R_Seguimiento = '1' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a la Condesa' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a la Zona Rosa' ";
  strSqlText = strSqlText + " And R_Programa <> 'Protejamos a Garibaldi' ";
  strSqlText =
    strSqlText + " And R_Programa <> 'Protejamos a Nuestro Aeropuerto' ";
  strSqlText = strSqlText + " And R_Programa <> 'Terminales Seguras' ";
  strSqlText = strSqlText + " And R_Programa <> 'Paot' ";
  strSqlText =
    strSqlText +
    " And R_Programa <> 'Reordenamiento de trabajadores no asalariados' ";
  strSqlText = strSqlText + " And R_Programa <> '10 Comportamientos' ";
  strSqlText = strSqlText + " And R_Programa <> 'Reventa de Boletos' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'SIDEC' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'Ciro Di Constanzo' ";
  strSqlText = strSqlText + " And R_Catalogo <> 'No más extorsiones' ";
  //'strSqlText = strSqlText + " And R_Acompanamiento is null ";
  strSqlText = strSqlText + " And R_Invea <> 'S' ";
  //Bandera
  //'strSqlText = strSqlText + " R_Bandera = '0' "

  strSqlText = strSqlText + " Order by str(R_Folio) Desc ";
  console.log("query para validador: ", strSqlText);
  return strSqlText;
}
