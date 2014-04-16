<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Skew Pictures Helper

if (!function_exists('skewPicture')) {
    function skewPicture($start_picture, $final_picture, $skew_points)
    {
        if (count($skew_points) == 0) {
            return "The points are empty. It doesn't have any data.";
        } else {
            $image = new imagick( $start_picture );
            $points = array(
                0, 0, $skew_points['top_left'][0], $skew_points['top_left'][1], # top left
                $image->width, 0, $skew_points['top_right'][0], $skew_points['top_right'][1], # top right
                0, $image->height, $skew_points['bottom_left'][0], $skew_points['bottom_left'][1], # bottom left
                $image->width, $image->height, $skew_points['bottom_right'][0], $skew_points['bottom_right'][1] # bottom right
            );
            $image->setimagebackgroundcolor( "transparent" ); // #FFFFFF
            $image->setImageVirtualPixelMethod( imagick::VIRTUALPIXELMETHOD_BACKGROUND );
            $image->distortImage( Imagick::DISTORTION_PERSPECTIVE, $points, TRUE );
            $image->writeImage( $final_picture );
            return $final_picture;
        }
    }
}

/* End of file skew_helper.php */
/* Location: ./application/helpers/skew_helper.php */