import React from "react";
import {View, StyleSheet, Text, Image} from "react-native";



function Home() {
    return (
        <View style={styles.container}>
            <Text>
                
                <Image source={require('../../assets/map.png')} />
           </Text>
        </View>
    );
}

const styles = StyleSheet.create({
  container: {
    position: 'absolute',
    bottom: '1%',
  }

});
export default Home;