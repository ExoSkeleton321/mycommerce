<?php
session_start();

	/*if(!empty(trim($_POST['txtNameProduct'])) 
        && !empty(trim($_POST['txtDescripcion'])) 
        && !empty(trim($_POST['txtPrecio'])) 

        && is_numeric($_POST['txtPrecio']) 
        && is_numeric($_POST['txtCategoria']) 
        && is_numeric($_POST['txtUnidadMedida'])  

        && $_POST['txtTags'] !== ""
        && $_POST['txtPrecio'] !== "0"
        && $_POST['txtCategoria'] !== "0"
        && $_POST['txtUnidadMedida'] !== "0"

        && isset($_POST['txtEstado'])    && is_numeric($_POST['txtEstado'])
        && isset($_POST['txtMunicipio']) && is_numeric($_POST['txtMunicipio'])
        && isset($_POST['txtColonia'])   && is_numeric($_POST['txtColonia'])

        && $_POST['txtEstado'] !== "0"
        && $_POST['txtMunicipio'] !== "0"
        && $_POST['txtColonia'] !== "0"
    ):

		if(empty($_FILES['imageProduct']['name'])):
			header("Location: ../../vender?falseProducto");
            exit();
		else:
            require("Functions.php");
            $obj = new Functions();

            //Get my profile
            if(isset($_COOKIE['user'])):
                $profile = $obj->getMyProfile($_COOKIE['user']);
                $randID  = uniqid($_COOKIE['user'],true);
            else:
                $profile = $obj->getMyProfile($_SESSION['user']);
                $randID  = uniqid($_SESSION['user'],true);
            endif;

            //Validate image and get image details
			$allowedImgType   = array("jpg", "jpeg", "png");
			$imgName 	      = $_FILES['imageProduct']['name'];
			$imgExtension 	  = mb_strtolower(end(explode(".", $imgName)));
			$img     	      = $_FILES['imageProduct']['tmp_name'];

			$path = "../../images/products/". $randID .".png";

            //Check if it's a producto or service and check if limite de existencias
            if(isset($_POST['chkSinLimiteExistencias'])){
                //No limite de existencias
                $existencias = 'n';
            }else{
                if(!isset($_POST['txtExistencias'])){
                    //Es un servicio el anuncio
                    $existencias = 's';
                }else{
                    if(is_numeric($_POST['txtExistencias'])){
                        $existencias = $_POST['txtExistencias'];
                    }else{
                        header("Location: ../../vender?falseProducto");
                        exit();
                    }                
                }
            }

			//Begin anuncio upload
			if(in_array($imgExtension, $allowedImgType)):
                //Uploading image
                list($width, $height, $type, $attr) = getimagesize($_FILES['imageProduct']['tmp_name']); //this function can algo take a url as a parameter
                if($width < 80 || $height < 80):
                    echo 'Imagen muy peque&ntilde;a,debe ser minimo 80x80px.';
                    exit();
                endif; 

                if($imgExtension != "png"):
                    if($imgExtension == "jpg"):
                            $imgObj = imagecreatefromjpeg($img);
                            imagepng($imgObj, $img . '.png');
                    elseif($imgExtension == "jpeg"):
                            $imgObj = imagecreatefromjpeg($img);
                            imagepng($imgObj, $img . '.png');
                    endif;
                            
					move_uploaded_file($img, $path);
                                        
					$query = $pdo->prepare("
                        INSERT INTO productos (usuario_id, nombre, descripcion, tags, existencias, categoria_id, tipoMedida_id, tipoEnvio_id, costo, estado_id, municipio_id, localidad_id, uniqId, time) 
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)
                    ");
					$query->execute([
                        $profile['usuario_id'], 
                        trim(htmlentities($_POST['txtNameProduct'])), 
                        $_POST['txtDescripcion'],
                        trim($_POST['txtTags']), 
                        trim($existencias),
                        trim($_POST['txtCategoria']),
                        trim($_POST['txtUnidadMedida']),
                        '0',
                        trim(htmlentities($_POST['txtPrecio'])),
                        $_POST['txtEstado'],  
                        $_POST['txtMunicipio'],  
                        $_POST['txtColonia'],  
                        $randID,
                        time()
                    ]);

                    //Get last producto id
                    $id = $pdo->prepare("
                        SELECT producto_id 
                        FROM productos
                        WHERE usuario_id = :myId
                        ORDER BY producto_id DESC
                        LIMIT 1
                    ");
                    $id->execute([
                        'myId' => $profile['usuario_id']
                    ]);
                    $id = $id->fetch()['producto_id'];

					header("Location: ../../producto/" . $id);
					exit();
				elseif($imgExtension == 'png'):
					move_uploaded_file($img, $path);
                                        
					$query = $pdo->prepare("
                        INSERT INTO productos (usuario_id, nombre, descripcion, tags, existencias, categoria_id, tipoMedida_id, tipoEnvio_id, costo, estado_id, municipio_id, localidad_id, uniqId, time) 
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)
                    ");
                    $query->execute([
                        $profile['usuario_id'], 
                        trim(htmlentities($_POST['txtNameProduct'])), 
                        $_POST['txtDescripcion'],
                        trim($_POST['txtTags']), 
                        trim($existencias),
                        trim($_POST['txtCategoria']),
                        trim($_POST['txtUnidadMedida']),
                        '0',
                        trim(htmlentities($_POST['txtPrecio'])),
                        $_POST['txtEstado'],  
                        $_POST['txtMunicipio'],  
                        $_POST['txtColonia'],  
                        $randID,
                        time()
                    ]);
                    
					//Get last producto id
                    $id = $pdo->prepare("
                        SELECT producto_id 
                        FROM productos
                        WHERE usuario_id = :myId
                        ORDER BY producto_id DESC
                        LIMIT 1
                    ");
                    $id->execute([
                        'myId' => $profile['usuario_id']
                    ]);
                    $id = $id->fetch()['producto_id'];

                    header("Location: ../../producto/" . $id);
                    exit();
	            endif;
            else:
                echo 'Formatos permitidos: png, jpg, jpeg.';
			endif;
		endif;
    else:
        header("Location: ../../vender?falseProducto");
        exit();
	endif;*/